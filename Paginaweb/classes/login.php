<?php

class Login //2.in clasa
{
	private $error=""; //2.properties
	
			//1.cand evaluate function is apelata 
		public function evaluate($data) //2.method
		{
			//1.citeste valorile
			$email = addslashes($data['email']); //adslashes pentru a scoate caracterele speciale
			$password = addslashes($data['password']);

			//1.verifica daca email-ul exista
			$query = "select * from users where email='$email' limit 1";	//returneaza un singur utilizator cu acel email(limit 1)
			//1.citeste-ul din baza de date daca exista
			$DB = new Database();
			$result = $DB->read($query);
			
			if($result)
			{
				$row = $result[0];
				//1.verifica daca parola este corecta si creeaza o session data sa autentifice user-ul
				if($password == $row['password'])
				{
						//create session data(array)(memoreaza informatiile useru-uli logat->il folosim sa verificam ca user-ul este logat)
					$_SESSION['userid']=$row['userid'];
				}
				//1.daca nu este corecta trimite o eroare
			}else{
				$this->error .="wrong pass<br>";
			}

			/*else{
				$this->error .= "No such email was found<br>";
			}*/
			return $this->error;
		}

		//metoda verifica daca id-ul este real si user-ul este logat pentru a oferi accesul

		function check_login($id)
		{
            if (is_numeric($id)) {
			$query = "select * from users where userid='$id' limit 1";	//returneaza un singur utilizator cu acel email(limit 1)
			//1.citeste-ul din baza de date daca exista
			$DB = new Database();
			$result = $DB->read($query);

			if($result)
			{
                $user_data=$result[0];
				return $user_data;
			}else {
		header("Location: Login.php");
		die;
            }
        }else {
	header("Location: Login.php");
	die;
    }
	 
} 
	
}

?>