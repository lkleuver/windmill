<?php

class WW_Input_WordpressBridge {
	
	private $config;
	private $db;
	
	
	public function __construct($cfg) {
		$this->config = $cfg;
	}
	
	public function connect() {
		$this->db = mysql_connect($this->config["server"], $this->config["username"], $this->config["password"]);

		if(!@mysql_select_db($this->config["database"], $this->db)) {
			return false;
		}
		return true;
	}
	
	public function getPageContent($key) {
		$result = null;
		$sql = sprintf("SELECT p.* FROM wp_posts p WHERE p.post_status = 'publish' AND p.post_name = '%s'", mysql_real_escape_string($key));
		$rs = mysql_query($sql, $this->db);
		if($row = mysql_fetch_object($rs)) {
			$result = $row;
		}

		return $result;
	}
	
	public function getSidebarContent($key) {
		
	}
	
	public function getPosts($tag, $limit = 10) {
		$result = array();
		$sql = sprintf("SELECT p.* FROM wp_posts p, wp_terms pt, wp_term_relationships ptr, wp_term_taxonomy tt WHERE p.ID = ptr.object_id AND ptr.term_taxonomy_id = tt.term_taxonomy_id AND tt.term_id = pt.term_id AND pt.slug = '%s'", mysql_real_escape_string($tag));
		$rs = mysql_query($sql, $this->db);
		while($row = mysql_fetch_object($rs)) {
			$result[] = $row;
		}

		return $result;
	}
	
	public function getPost($key) {
		$result = null;
		$sql = sprintf("SELECT p.* FROM wp_posts p WHERE p.post_status = 'publish' AND p.post_name = '%s'", mysql_real_escape_string($key));
		$rs = mysql_query($sql, $this->db);
		if($row = mysql_fetch_object($rs)) {
			$result = $row;
		}

		return $result;
	}
	
	public function idForKey($key) {
		$result = 0;
		$sql = sprintf("SELECT p.ID FROM wp_posts p WHERE p.post_status = 'publish' AND p.post_name = '%s'", mysql_real_escape_string($key));
		$rs = mysql_query($sql, $this->db);
		if($row = mysql_fetch_object($rs)) {
			$result = $row->ID;
		}

		return $result;
	}
	
	public function getSubpages($key, $includeContent = false) {
		$result = array();
		$sql = sprintf("SELECT %s FROM wp_posts p WHERE p.post_status = 'publish' AND p.post_parent = '%s'", 
			$includeContent ? "p.*" : "p.post_title, p.post_name", 
			$this->idForKey($key));
			
		$rs = mysql_query($sql, $this->db);
		while($row = mysql_fetch_object($rs)) {
			$result[] = $row;
		}

		return $result;	
	}
	
}