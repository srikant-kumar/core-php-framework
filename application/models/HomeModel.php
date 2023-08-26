<?php

class HomeModel extends MainModel
{
    public function select()
    {
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);

        $i = 0;
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[$i] = $row;
        }
        //user $result->fetch_object for getting object

        return $data;
    }
}
