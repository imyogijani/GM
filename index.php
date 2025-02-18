<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="CSS/Index.css">
</head>

<body>
    <section class="container">
        <header>Mock Test Registration</header>
        <!-- <div class="column"> -->
        <a href="#"><button type="button" class="btn"> <span>Single</span></button></a>
        <a href="bulk-regi.php"><button type="button" class="btn"> <span>Bulk</span></button></a>
        <!-- </div> -->
        <hr style="color: black; border-radius: 10px; margin-top: 10px; ">
        <form class="form" action="#" method="post">
            <div class="input-box">
                <label>Student Full Name :</label>
                <input required="" placeholder="Enter full name" type="text" name="full_name">
            </div>
            <div class="checkbox">
                <label>Standard :</label>
                <div class="s_option">
                    <div class="check">
                        <input type="radio" name="Standard" id="check1" checked="">
                        <label for="10">10th</label>
                    </div>
                    <div class="check">
                        <input type="radio" name="Standard" id="check2">
                        <label for="12">12th(JEE/NEET + GUJCET)</label>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>Medium :</label>
                <div class="s_option">
                    <div class="check">
                        <input type="radio" name="Medium" id="check1" checked="">
                        <label for="guj">Guj</label>
                    </div>
                    <div class="check">
                        <input type="radio" name="Medium" id="check2">
                        <label for="eng">Eng</label>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>Group :</label>
                <div class="s_option">
                    <div class="check">
                        <input type="radio" name="group" id="a">
                        <label for="a">A</label>
                    </div>
                    <div class="check">
                        <input type="radio" name="group" id="b">
                        <label for="b">B</label>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label>Contect No. :</label>
                <input required="" placeholder="Enter phone number" type="number" name="contact_no">
            </div>
            <div class="input-box">
                <label>WhatsApp No. :</label>
                <input type="number" placeholder="Enter WhatsApp Number" name="WhatsApp_no" required>
            </div>
            <div class="gender-box">
                <label style="color: #000;">Gender :</label>
                <div class="gender-option">
                    <div class="gender">
                        <input checked="" name="gender" id="check-male" type="radio">
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input name="gender" id="check-female" type="radio">
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input name="gender" id="check-other" type="radio">
                        <label for="check-other">Prefer not to say</label>
                    </div>
                </div>
            </div>
            <div class="input-box address">
                <label>Address :</label>
                <input required="" placeholder="Enter street address" type="text" name="address">
                <div class="column">
                    <div class="select-box">
                        <select name="city">
                            <option selected disabled value="">City</option>
                            <option value="Abrama">Abrama</option>
                            <option value="Adalaj">Adalaj</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Ahwa">Ahwa</option>
                            <option value="Amod">Amod</option>
                            <option value="Amreli">Amreli</option>
                            <option value="Amroli">Amroli</option>
                            <option value="Anand">Anand</option>
                            <option value="Anjar">Anjar</option>
                            <option value="Ankleshwar">Ankleshwar</option>
                            <option value="Babra">Babra</option>
                            <option value="Bagasara">Bagasara</option>
                            <option value="Bagasra">Bagasra</option>
                            <option value="Banas Kantha">Banas Kantha</option>
                            <option value="Bantva">Bantva</option>
                            <option value="Bardoli">Bardoli</option>
                            <option value="Bedi">Bedi</option>
                            <option value="Bhachau">Bhachau</option>
                            <option value="Bhanvad">Bhanvad</option>
                            <option value="Bharuch">Bharuch</option>
                            <option value="Bhavnagar">Bhavnagar</option>
                            <option value="Bhayavadar">Bhayavadar</option>
                            <option value="Bhuj">Bhuj</option>
                            <option value="Bilimora">Bilimora</option>
                            <option value="Bilkha">Bilkha</option>
                            <option value="Borsad">Borsad</option>
                            <option value="Botad">Botad</option>
                            <option value="Chaklasi">Chaklasi</option>
                            <option value="Chalala">Chalala</option>
                            <option value="Chanasma">Chanasma</option>
                            <option value="Chhala">Chhala</option>
                            <option value="Chhota Udepur">Chhota Udepur</option>
                            <option value="Chikhli">Chikhli</option>
                            <option value="Chotila">Chotila</option>
                            <option value="Dabhoi">Dabhoi</option>
                            <option value="Dahegam">Dahegam</option>
                            <option value="Dahod">Dahod</option>
                            <option value="Dakor">Dakor</option>
                            <option value="Damnagar">Damnagar</option>
                            <option value="Dangs (India)">Dangs (India)</option>
                            <option value="Dayapar">Dayapar</option>
                            <option value="Delvada">Delvada</option>
                            <option value="Delwada">Delwada</option>
                            <option value="Devbhumi Dwarka">Devbhumi Dwarka</option>
                            <option value="Devgadh Bariya">Devgadh Bariya</option>
                            <option value="Dhandhuka">Dhandhuka</option>
                            <option value="Dhanera">Dhanera</option>
                            <option value="Dharampur">Dharampur</option>
                            <option value="Dhari">Dhari</option>
                            <option value="Dhola">Dhola</option>
                            <option value="Dholka">Dholka</option>
                            <option value="Dhoraji">Dhoraji</option>
                            <option value="Dhrangadhra">Dhrangadhra</option>
                            <option value="Dhrol">Dhrol</option>
                            <option value="Dhuwaran">Dhuwaran</option>
                            <option value="Disa">Disa</option>
                            <option value="Dohad">Dohad</option>
                            <option value="Dungarpur">Dungarpur</option>
                            <option value="Dwarka">Dwarka</option>
                            <option value="Gadhada">Gadhada</option>
                            <option value="Gandevi">Gandevi</option>
                            <option value="Gandhidham">Gandhidham</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                            <option value="Gariadhar">Gariadhar</option>
                            <option value="Ghogha">Ghogha</option>
                            <option value="Gir Somnath">Gir Somnath</option>
                            <option value="Godhra">Godhra</option>
                            <option value="Gondal">Gondal</option>
                            <option value="Halol">Halol</option>
                            <option value="Halvad">Halvad</option>
                            <option value="Hansot">Hansot</option>
                            <option value="Harij">Harij</option>
                            <option value="Himatnagar">Himatnagar</option>
                            <option value="Jalalpore">Jalalpore</option>
                            <option value="Jalalpur">Jalalpur</option>
                            <option value="Jambusar">Jambusar</option>
                            <option value="Jamnagar">Jamnagar</option>
                            <option value="Jasdan">Jasdan</option>
                            <option value="Jetalsar">Jetalsar</option>
                            <option value="Jetpur">Jetpur</option>
                            <option value="Jhulasan">Jhulasan</option>
                            <option value="Jodhpur">Jodhpur</option>
                            <option value="Jodia">Jodia</option>
                            <option value="Jodiya Bandar">Jodiya Bandar</option>
                            <option value="Junagadh">Junagadh</option>
                            <option value="Kachchh">Kachchh</option>
                            <option value="Kadi">Kadi</option>
                            <option value="Kadod">Kadod</option>
                            <option value="Kalavad">Kalavad</option>
                            <option value="Kalol">Kalol</option>
                            <option value="Kandla">Kandla</option>
                            <option value="Kanodar">Kanodar</option>
                            <option value="Kapadvanj">Kapadvanj</option>
                            <option value="Karamsad">Karamsad</option>
                            <option value="Kathor">Kathor</option>
                            <option value="Katpur">Katpur</option>
                            <option value="Kavant">Kavant</option>
                            <option value="Kawant">Kawant</option>
                            <option value="Keshod">Keshod</option>
                            <option value="Khambhalia">Khambhalia</option>
                            <option value="Khambhat">Khambhat</option>
                            <option value="Kheda">Kheda</option>
                            <option value="Khedbrahma">Khedbrahma</option>
                            <option value="Kheralu">Kheralu</option>
                            <option value="Kodinar">Kodinar</option>
                            <option value="Kosamba">Kosamba</option>
                            <option value="Kundla">Kundla</option>
                            <option value="Kutch district">Kutch district</option>
                            <option value="Kutiyana">Kutiyana</option>
                            <option value="Lakhtar">Lakhtar</option>
                            <option value="Lalpur">Lalpur</option>
                            <option value="Lathi">Lathi</option>
                            <option value="Limbdi">Limbdi</option>
                            <option value="Lunavada">Lunavada</option>
                            <option value="Mahemdavad">Mahemdavad</option>
                            <option value="Mahesana">Mahesana</option>
                            <option value="Mahudha">Mahudha</option>
                            <option value="Malpur">Malpur</option>
                            <option value="Manavadar">Manavadar</option>
                            <option value="Mandal">Mandal</option>
                            <option value="Mandvi">Mandvi</option>
                            <option value="Mandvi (Surat)">Mandvi (Surat)</option>
                            <option value="Mangrol">Mangrol</option>
                            <option value="Mansa">Mansa</option>
                            <option value="Meghraj">Meghraj</option>
                            <option value="Mehsana">Mehsana</option>
                            <option value="Mendarda">Mendarda</option>
                            <option value="Modasa">Modasa</option>
                            <option value="Morbi">Morbi</option>
                            <option value="Morva (Hadaf)">Morva (Hadaf)</option>
                            <option value="Morwa">Morwa</option>
                            <option value="Mundra">Mundra</option>
                            <option value="Nadiad">Nadiad</option>
                            <option value="Naliya">Naliya</option>
                            <option value="Narmada">Narmada</option>
                            <option value="Naroda">Naroda</option>
                            <option value="Navsari">Navsari</option>
                            <option value="Okha">Okha</option>
                            <option value="Olpad">Olpad</option>
                            <option value="Paddhari">Paddhari</option>
                            <option value="Padra">Padra</option>
                            <option value="Palanpur">Palanpur</option>
                            <option value="Palitana">Palitana</option>
                            <option value="Paliyad">Paliyad</option>
                            <option value="Panch Mahals">Panch Mahals</option>
                            <option value="Panchmahal district">Panchmahal district</option>
                            <option value="Pardi">Pardi</option>
                            <option value="Parnera">Parnera</option>
                            <option value="Patan">Patan</option>
                            <option value="Pavi Jetpur">Pavi Jetpur</option>
                            <option value="Petlad">Petlad</option>
                            <option value="Porbandar">Porbandar</option>
                            <option value="Radhanpur">Radhanpur</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Rajpipla">Rajpipla</option>
                            <option value="Rajula">Rajula</option>
                            <option value="Ranavav">Ranavav</option>
                            <option value="Rapar">Rapar</option>
                            <option value="Roha">Roha</option>
                            <option value="Sabar Kantha">Sabar Kantha</option>
                            <option value="Sachin">Sachin</option>
                            <option value="Salaya">Salaya</option>
                            <option value="Sanand">Sanand</option>
                            <option value="Sankheda">Sankheda</option>
                            <option value="Sarkhej">Sarkhej</option>
                            <option value="Savarkundla">Savarkundla</option>
                            <option value="Sayla">Sayla</option>
                            <option value="Shahpur">Shahpur</option>
                            <option value="Shivrajpur">Shivrajpur</option>
                            <option value="Siddhpur">Siddhpur</option>
                            <option value="Sihor">Sihor</option>
                            <option value="Sikka">Sikka</option>
                            <option value="Sinor">Sinor</option>
                            <option value="Sojitra">Sojitra</option>
                            <option value="Songadh">Songadh</option>
                            <option value="Surat">Surat</option>
                            <option value="Surendranagar">Surendranagar</option>
                            <option value="Talaja">Talaja</option>
                            <option value="Tankara">Tankara</option>
                            <option value="Tapi">Tapi</option>
                            <option value="Than">Than</option>
                            <option value="Thangadh">Thangadh</option>
                            <option value="Tharad">Tharad</option>
                            <option value="Thasra">Thasra</option>
                            <option value="The Dangs">The Dangs</option>
                            <option value="Umrala">Umrala</option>
                            <option value="Umreth">Umreth</option>
                            <option value="Un">Un</option>
                            <option value="Una">Una</option>
                            <option value="Unjha">Unjha</option>
                            <option value="Upleta">Upleta</option>
                            <option value="Utran">Utran</option>
                            <option value="Vadnagar">Vadnagar</option>
                            <option value="Vadodara">Vadodara</option>
                            <option value="Vaghodia">Vaghodia</option>
                            <option value="Vallabh Vidyanagar">Vallabh Vidyanagar</option>
                            <option value="Vallabhipur">Vallabhipur</option>
                            <option value="Valsad">Valsad</option>
                            <option value="Vansda">Vansda</option>
                            <option value="Vapi">Vapi</option>
                            <option value="Vartej">Vartej</option>
                            <option value="Vasa">Vasa</option>
                            <option value="Vaso">Vaso</option>
                            <option value="Vejalpur">Vejalpur</option>
                            <option value="Veraval">Veraval</option>
                            <option value="Vijapur">Vijapur</option>
                            <option value="Vinchhiya">Vinchhiya</option>
                            <option value="Vinchia">Vinchia</option>
                            <option value="Virpur">Virpur</option>
                            <option value="Visavadar">Visavadar</option>
                            <option value="Visnagar">Visnagar</option>
                            <option value="Vyara">Vyara</option>
                            <option value="Wadhai">Wadhai</option>
                            <option value="Wadhwan">Wadhwan</option>
                            <option value="Waghai">Waghai</option>
                            <option value="Wankaner">Wankaner</option>
                        </select>
                    </div>
                    <!-- <input required="" placeholder="Enter your city" type="text"> -->
                </div>
            </div>
            <button type="submit">Submit</button>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                // Establish a MySQL database connection
                $conn = new mysqli('localhost', 'root', '', 'jee_mock');

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get form data
                $full_name = isset($_POST['full_name']) ? $_POST['full_name'] : null;
                $standard = isset($_POST['Standard']) ? $_POST['Standard'] : null;
                $medium = isset($_POST['Medium']) ? $_POST['Medium'] : null;
                $group_type = isset($_POST['group']) ? $_POST['group'] : null;
                $contact_no = isset($_POST['contact_no']) ? $_POST['contact_no'] : null;
                $whatsapp_no = isset($_POST['WhatsApp_no']) ? $_POST['WhatsApp_no'] : null;
                $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
                $address = isset($_POST['address']) ? $_POST['address'] : null;
                $city = isset($_POST['city']) ? $_POST['city'] : null;


                if (is_null($full_name)) die("Please Enter full_name !");
                if (is_null($standard)) die("Please Enter standard !");
                if (is_null($medium)) die("Please Enter medium !");
                if (is_null($contact_no)) die("Please Enter contact_no !");
                if (is_null($whatsapp_no)) die("Please Enter whatsapp_no !");
                if (is_null($gender)) die("Please Enter gender !");
                if (is_null($address)) die("Please Enter address !");
                if (is_null($city)) die("Please Enter city !");

                // Insert data into the database
                $sql = "INSERT INTO student_data (full_name, standard, medium, group_type, contact_no, whatsapp_no, gender, address, city)
                    VALUES (?,?,?,?,?,?,?,?,?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param('sssssssss', $full_name, $standard, $medium, $group_type, $contact_no, $whatsapp_no, $gender, $address, $city);

                if ($stmt->execute() === TRUE) {
                    echo "Data inserted successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the database connection
                $conn->close();
            }
            ?>

        </form>
    </section>
</body>

</html>