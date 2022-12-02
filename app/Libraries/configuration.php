<?php

class configuration
{
    public function returnConfig()
    {
        $database = new database();
        $config = $database->get_data("app_config", "*");
        return($config);
    }

    public function storeArray()
    {
        $config = $this->returnConfig();
        if($config)
        {
            $data = null;
            foreach ($config as $value)
            {
                $data[$value['name']] = $value;
            }
            return $data;
        }
        else
        {
            return false;
        }
    }
}