<?php
	class DBControllerHelper
    {	
		protected $tableName;
        protected $db;

        function __construct()
        {
            $this->db = new DBController();
        }
		
		function setTableName($tableName) { $this->tableName = $tableName; }
		function getTableName() { return $this->tableName; }

        function setDb($db) { $this->db = $db; }
        function getDb() { return $this->db; }

        function getInsertID(){
            return $this->db->getInsertID();
        }
    }
