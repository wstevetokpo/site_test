<?php

    class DB {
        private $_get, $_put, $_update, $_drop;
        public $_connectDB;
        public function __construct() {
            try {
                $this->connectionDB();
            }
            catch (Exception $e) {
                try {
                    initializeDB();
                }
                catch (Exception $e) {
                    die('Something wrong happens: <b>' . $e->getMessage() . '</b>');
                }
            }
        }
        public function connectionDB() {
            global $infoDB;
            $this->_connectDB = new PDO('mysql:host=' . $infoDB['host'] . ';dbname=' . $infoDB['dbName'], $infoDB['username'], $infoDB['password']);
            $this->_connectDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return TRUE;
        }
        public function execReq($req, $exec) {
            $this->_exec_req = $this->_connectDB->prepare($req);
            $this->_exec_req->execute($exec);
            $answer = $this->_exec_req->fetchAll();
            $this->_exec_req->closeCursor();
            return TRUE;
        }
        public function get($table, $where, $whereArr, $order, $orderSc, $limit, $offset) {
            $request = 'SELECT * FROM `' . $table . '`';
            if ( strlen($where) > 0 ) {
                $request .= ' WHERE ' . $where;
            }
            $request .= ' ORDER BY `' . $order . '`';
            if ( !$orderSc ) {
                $request .= ' DESC';
            }
            if ( $limit > 0 ) {
                $request .= ' LIMIT ' . $limit;
                $request .= ' OFFSET ' . $offset;
            }
            $this->_get = $this->_connectDB->prepare($request);
            if ( strlen($where) > 0 ) {
                $this->_get->execute($whereArr);
            }
            else {
                $this->_get->execute(array());
            }
            $answer = $this->_get->fetchAll();
            $this->_get->closeCursor();
            return $answer;
        }
        public function drop($table, $column, $value) {
            $answer = FALSE;
            $this->_drop = $this->_connectDB->prepare("DELETE FROM `" . $table . "` WHERE `" . $column . "`=?");
            if ($this->_drop->execute(array($value))) {
                $answer = TRUE;
            }
            $this->_drop->closeCursor();
            return $answer;
        }
        public function update($table, $columnId, $value, $newValueArr) {
            $answer = TRUE;
            foreach ($newValueArr as $key => $val):
                $this->_update = $this->_connectDB->prepare("UPDATE `" . $table . "` SET `" . $key . "`=? WHERE `" . $columnId . "`=?");
                if ( $this->_update->execute(array($val, $value)) ) {
                    // OK
                }
                else {
                    $answer = FALSE;
                }
                $this->_update->closeCursor();
            endforeach;
            return $answer;
        }
        public function put($table, $col, $val) {
            $request = 'INSERT INTO `' . $table . '`(';
            foreach ($col as $key => $value) {
                if ( $key > 0 ) {
                    $request .= ', ';
                }
                $request .= '`' . $value . '`';
            }
            $request .= ') VALUES (';
            for ( $e = 1, $c = count($col); $e <= $c; $e += 1) {
                if ( $e > 1 ) {
                    $request .= ', ';
                }
                $request .= '?';
            }
            $request .= ')';
            $this->_put = $this->_connectDB->prepare($request);
            $this->_put->execute($val);
            $li = $this->_connectDB->lastInsertId();
            $this->_put->closeCursor();
            return $li;
        }
    }

    $dataBases = new DB();