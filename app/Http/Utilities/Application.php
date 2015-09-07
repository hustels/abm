<?php 

	namespace App\Http\Utilities;
	class Application
	{
			protected static $applications =[
			"networkresource"=> "Recurso de red",
		    "vpn"=> "VPN",
		    "clearsea"=> "ClearSea",
		    "proxy"=> "Proxy",
		    "emailAccount"=> "Correo",
		    "activeSync"=> "activeSync",
		    "addUser"=> "Alta usuario EMEA",
		    "externUserExpireAccount"=> "Ampliacion usuario externo",
		    "wifi"=> "Wifi invitados",
		    "siebelPortugal"=> "Siebel Portugal",
		   	"silentel"=> "Silentel",
		    "sco"=> "SCO India",
		    "daCitrix"=> "DA Citrix"];
		public static function applications(){
			return static::$applications;
		}
	}
 ?>