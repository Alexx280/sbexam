<?php
Class db_ {
    var  $link_db;
    
    function connect($conf_db)
    {
        $this->link_db = new mysqli($conf_db[0], $conf_db[1], $conf_db[2], $conf_db[3]);
        $this->link_db->query("SET NAMES utf8");
    }



	function mquery($query, $value=array())
    {
        $pieces = explode('?', $query);
        $entry = sizeof($pieces);
        if ($entry > 0)
        {
            $query = '';
            $i=0;
            foreach ($pieces as $piece)
            {
                $value_current = $value[$i];
                $query .= $piece.$value_current;
                $i++;

            }
        }

        if ($result = $this->link_db->query($query))
        {

            if (!is_object($result))
            {
                return $this->link_db->insert_id;
            }
            $data = array();
            while ($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }
        }
        return $data;
	}
	function mquerys($query, $value=array())
	{
	   	$pieces = explode('?', $query);
		$entry = sizeof($pieces);
		if ($entry > 0)
		{
			$query = '';
			$value = array_map(array("Brain_DB", "envelope"), $value);
            $i=0;
			foreach ($pieces as $piece)
			{
				$value_current = $value[$i];
				$query .= $piece.$value_current;
                $i++;
                
			}
		}
        
	
		if ($result = $this->link_db->query($query))
		{
			if (!is_object($result))
			{
				return $this->link_db->insert_id;
			}
			$data = array();
			while ($row = $result->fetch_assoc())
			{
				$data[] = $row;
			}
		}
		return $query;
	}

}

$db= new db_;
$conf_db = array($config["database"]["host"],$config["database"]["username"],$config["database"]["password"],$config["database"]["name"]);
$db->connect($conf_db);

?>