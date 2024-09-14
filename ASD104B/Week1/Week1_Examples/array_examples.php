<?php

	// Example of a simple array
	$Provinces = array("Quebec", "Ontario", "Alberta", "Manitoba");
	echo "<p>$Provinces[1] is a province in Canada.</p>";
	
	// The following is an equivalent array expression:
	//$Provinces = ["Quebec", "Ontario", "Alberta", "Manitoba"];
	
	// Example of the function count()
	echo "<p>There are ", count($Provinces), " provinces in the array.</p>";

	// Example of assigning/substituting a value to an array
	$Provinces[0] = "Edmonton";
	echo "<p>$Provinces[0] is a city in Alberta.</p>";
	
	// Creating an associative array with predetermined indices:
	$Territories[100] = "Nunavut";
	$Territories[] = "Northwest Territories";  // This appends a value to the end of the array
	$Territories[] = "Yukon Territory";
	echo "<pre>\n";
	print_r($Territories);
	echo "</pre>\n";
	
	// Adding and removing elements from the beginning of an array using the shift() function
	$TopSellers = array(
		"Chevrolet Impala",
		"Chevrolet Malibu",
		"Chevrolet Silverado",
		"Ford F-Series",
		"Toyota Camry",
		"Toyota Corolla",
		"Nissan Altima",
		"Honda Accord",
		"Honda Civic",
		"Dodge Ram"
		);
	echo "<pre>\n";
	print_r($TopSellers);
	echo "</pre>\n";
	
	array_shift($TopSellers);   // This function removes the first value of the array
	echo "<pre>\n";
	print_r($TopSellers);
	echo "</pre>\n";
	
	array_unshift($TopSellers, "Honda CR-V"); // This function adds a value to the start of an array
	echo "<pre>\n";
	print_r($TopSellers);
	echo "</pre>\n";
	
	// Adding a removing elemts from the end of an Array using the array_pop() and array_push() functions
	$HospitalDepts = [
					"Anesthesia",
					"Molecular Biology",
					"Neurology",
					"Pediatrics"
					];
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";
	
	array_pop($HospitalDepts);		// array_pop() deletes the last value (Pediatrics)
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";
	
	// array_push() function adds one or more items to the end of an array
	array_push($HospitalDepts, "Psychiatry", "Pulmonary Diseases");
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";
	
	// Inserting and removing elements within an array using array_splice() function
	// Usage: array_splice(array_name, start_index, characters_to_delete, values_to_insert);
	array_splice($HospitalDepts, 3, 0, "Ophthalmology");
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";
	
	// Inserting more than one value
	array_splice($HospitalDepts, 3, 0, array("Pediatrics", "Otolaryngology"));
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";
	
	array_splice($HospitalDepts, 3, 2);
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";
	
	// Removing values using the unset() function
	unset($HospitalDepts[0], $HospitalDepts[1]);
	echo "<pre>\n";
	print_r($HospitalDepts);
	echo "</pre>\n";	
	
	// Removing duplicate elements using array_unique() function
	$TopSellers = array(
		"Honda CR-V",
		"Chevrolet Impala",
		"Ford F-Series",
		"Chevrolet Malibu",
		"Chevrolet Silverado",
		"Ford F-Series",
		"Toyota Camry",
		"Honda Civic",
		"Honda Civic",
		"Toyota Corolla",
		"Nissan Altima",
		"Honda Accord",
		"Honda Civic",
		"Honda CR-V",
		"Dodge Ram"
		);
		echo "<pre>\n";
		print_r($TopSellers);
		echo "</pre>\n";
		
		$TopSellers = array_unique($TopSellers);  // The function does not alter the array
		echo "<pre>\n";
		print_r($TopSellers);
		echo "</pre>\n";
		
		
		echo "<br>";
		echo "************ The array with NULL values at index 5 and 8 ****************";
		echo "<br>";
		//Example using a for loop to iterate through an array
		for($i=0; $i < count($TopSellers); $i++){  // Returns warning because of NULL values
			echo "{$TopSellers[$i]}<br />";
		}
		
		// Using the array_values() function to discard NULL indexed values		
		$TopSellers = array_values($TopSellers);
		
		
		echo "<br>";
		echo "************ The array without any NULL values ****************";
		echo "<br>";
		//Example using a for loop to iterate through an array
		for($i=0; $i < count($TopSellers); $i++){  // Returns warning because of NULL values
			echo "{$TopSellers[$i]}<br />";
		}
		
		// Examples of Associative Arrays using function array_key_exists()
		$ScreenNames = [];
		$ScreenNames["Dancer"] = "Daryl";
		$ScreenNames["Fat Man"] = "Dennis";
		$ScreenNames["Assassin"] = "Jennifer";
		
		if(array_key_exists("Fat Man", $ScreenNames)){
			echo "<p>{$ScreenNames['Fat Man']} is already in the array for 'Fat Man'.</p>\n";
		} else {
			$ScreenNames['Fat Man'] = 'Don';
			echo "<p>{$ScreenNames['Fat Man']} is updated.</p>\n";
		}
			
		
		

?>
