<?php print('<form id="newLocationForm" method="POST" action="locations_create.php"> <!--i need to double check the submission-->
					<p id="room">
					<label for="new_room">Room: </label>
					<input type="text" name="new_room" id="roomInput" onfocus="if(this.value == "Room") { this.value = ""; }" onblur="if(this.value == "") { this.value = "Room"; }" value="Room" />
					</p>
					<br />
					
					<p id="containerNumber">
					<label for="new_container_number">Container Number: </label>
					<input type="text" name="new_container_number" id="containerNumberInput" onfocus="if(this.value == "Container Number") { this.value = ""; }"  onblur="if(this.value == "") { this.value = "Container Number"; }" value="Container Number"/>
					</p>
					
					<br />
					<p id="notes">
					<label for="new_notes">Notes: </label>
					<textarea name="new_notes" id="notesInput"></textarea>
					</p>
					<br />
					<input type="submit" name="submit" value="Create New Location!" />
				</form>');
?>