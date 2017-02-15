<?php

Class Poly extends CI_Model
{
	/*function login($user, $pass)
	{
		//$this -> db -> where('contrasena', MD5($contrasena));
 
		$sql = "SELECT use_name, use_typid FROM users WHERE use_name=? AND use_pass=? LIMIT 1";
		$query = $this->db->query($sql, array($user, $pass));
  
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}*/

	function getStat($lat, $lng, $agrzone)
	{
		$flag = 1;
		$dist = -1;
		$stat = -1;

		$sql = "SELECT ema_id, ema_latitud, ema_longitud FROM emas WHERE ema_agrid=?";
		$query = $this->db->query($sql, array($agrzone));
		$result = $query->result();

		foreach($result as $row)
		{
			$auxstat = $row->ema_id;			
			$auxdist = $this->distanceCal($lat, $lng, $row->ema_latitud, $row->ema_longitud);	
			if($auxdist < $dist || $flag)
			{
				$dist = $auxdist;
				$stat = $auxstat;
				$flag = 0;
			}
		}

		echo "[" . $stat . " - " . $dist . "km]<br>";
	}

	function getPoly($lat, $lng, $region)
	{
		$sql = "SELECT agr_id, agr_regid, agr_cantpoly, agr_color, agr_bcolor FROM agrzones WHERE agr_regid=?";
                $query1 = $this->db->query($sql, array($region));
		$result1 = $query1->result();


		foreach($result1 as $row)
		{
			//echo "[" . $row->agr_id . "]<br>";
			for($ix = 0; $ix < $row->agr_cantpoly; $ix++)
			{
				//echo "[" . $row->agr_id . " - " . $ix . "]<br>";
				$sql = "SELECT pol_lat, pol_lng FROM polyagr WHERE pol_agrid=? AND pol_numpoly=?";		
				$query2 = $this->db->query($sql, array($row->agr_id, $ix));
				//$result2 = $query2->result();			

				if($this->pnPoly($lat, $lng, $query2))
				{
					echo "[" . $row->agr_id . " - " . $ix . "]<br>";
					return $row->agr_id;
				}
			}
               	}


		return NULL;
	}

	function pnPoly($lat, $lng, $poly)
	{
		$i = $j = $c = 0;
		$nvert = $poly->num_rows();

                for ($i = 0, $j = $nvert-1; $i < $nvert; $j = $i++)
                {
                        if((($poly->row($i)->pol_lng>$lng) != ($poly->row($j)->pol_lng>$lng)) &&
                        ($lat < ($poly->row($j)->pol_lat-$poly->row($i)->pol_lat) * ($lng-$poly->row($i)->pol_lng)
                        / ($poly->row($j)->pol_lng-$poly->row($i)->pol_lng) + $poly->row($i)->pol_lat))
                                $c = !$c;
                }

		return $c;

		/*int i, j, c = 0;
  		for (i = 0, j = nvert-1; i < nvert; j = i++) 
  		{
     			if ( ((verty[i]>testy) != (verty[j]>testy)) &&
     			(testx < (vertx[j]-vertx[i]) * (testy-verty[i]) / (verty[j]-verty[i]) + vertx[i]) )
       				c = !c;
		}
		return c;*/
	}

	function distanceCal($point1_lat, $point1_long, $point2_lat, $point2_long)
       	{
		$degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
 
		$distance = $degrees * 111.13384; // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)
		return $distance;
	}
















}
?>
