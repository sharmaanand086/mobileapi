<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Event People Form</h2>
  <form action="action_page.php" method="post">
    <div class="form-group">
      <label for="Date">Date :</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="date"  required>
    </div>
    <div class="form-group">
      <label for="Tag">Tag No. :</label>
      <input type="text" class="form-control" id="tano" placeholder="Enter Tag Number" name="tagno" required>
    </div>
     <div class="form-group">
      <label for="Place">Place :</label>
       <select name="place" class="form-control" required>
           <option value="">select</option>
           <option value="Bangalore">Bangalore</option>
           <option  value="Pune">Pune</option>
           <option value="Mumbai">Mumbai</option>
           <option value="Ahmedabad">Ahmedabad</option>
           <option value="Hyderabad">Hyderabad</option>
           <option value="Delhi">Delhi</option>
           <option value="Chennai">Chennai</option>
          <option value="Gurgaon">Gurgaon</option>
          <option value="Goa">Goa</option>
          <option value="Noida">Noida</option>
          <option value="Chandigarh">Chandigarh</option>
           <option value="Indore">Indore</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Dubai">Dubai</option>
       </select>
    </div>
   <div class="form-group">
      <label for="Name">Name :</label>
       <select name="Name" class="form-control" required>
           <option value="" >select</option>
           <option value="Iffat">Iffat</option>
           <option value="Sushma">Sushma</option>
           <option value="Unati">Unati</option>
           <option value="Dinaaz">Dinaaz</option>
           <option value="Aarzoo">Aarzoo</option>
           <option value="Reeta">Reeta</option>
           <option value="Avinash">Avinash</option>
          <option value="Naina">Naina</option>
          <option value="Gemini">Gemini</option>
          <option value="Chinmay">Chinmay</option>
          <option value="Buddy Meet">Buddy Meet</option>
          <option value="Kamalneet">Kamalneet</option>
          <option value="Priya">Priya</option>
          <option value="Madhu">Madhu</option>
          <option value="Buddy Meet">Buddy Meet</option>
          <option value="Naushina">Naushina</option>
          <option value="Aneet">Aneet</option>
          <option value="Tejaswini">Tejaswini</option>
          <option value="David">David</option>
          <option value="Shez">Shez</option>
          <option value="admin">Admin</option>
           <option value="Irfan">Irfan</option>
            <option value="Jay">Jay</option>
       </select>
    </div>
     <div class="form-group">
      <label for="Type">Type :</label>
       <select name="Type" class="form-control" required>
           <option value="">select</option>
           <option value="CTF">CTF</option>
           <option  value="Incredible you">Incredible You</option>
           <option  value="MMM">MMM</option>
          
            
           
       </select>
    </div>
    
    <div class="form-group">
      <label for="time">time :</label>
       <select name="time" class="form-control" required>
           <option value="">select</option>
           <option value="Morning">Morning</option>
           <option  value="Afternoon">Afternoon</option>
           <option  value="Evening">Evening</option>
            
           
       </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
