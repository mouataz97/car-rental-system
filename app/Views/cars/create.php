<h2>Add Car</h2>

<form method="POST" action="/car-rental-system/public/cars/store">

Brand:
<input type="text" name="brand"><br><br>

Model:
<input type="text" name="model"><br><br>

License Plate:
<input type="text" name="license_plate"><br><br>

Price Per Day:
<input type="number" name="price_per_day"><br><br>

Status:
<select name="status">
<option value="available">Available</option>
<option value="rented">Rented</option>
</select>

<br><br>

<button type="submit">Save Car</button>

</form>