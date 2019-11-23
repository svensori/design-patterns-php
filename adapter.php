<?php 
	class ClientClass{
		//if the client changes the query() into initializeQuery()
		//the only thing we need to change is the old client function we have
		//on the adapter class
		public function query(){
			echo "Running query...";
		}
	}

	interface Adapter{
		public function runQuery();
	}

	class AdapterClass implements Adapter{
		private $clientClass;

		public function __construct(ClientClass $instance){
			$this->clientClass = $instance;
		}

		public function runQuery(){
			$this->clientClass->query();//this is the client class function
		}
	}

	$adapter = new AdapterClass(new ClientClass());
	$adapter->runQuery();