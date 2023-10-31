<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #3632a8;
  padding: 30px;
  color: white
}
.custom-button {
  background-color: #d8f759; 
  color: #000; 
  border: none; 
  padding: 10px 20px; 
  border-radius: 5px; 
  cursor: pointer; 
  font-size: 16px; 
  margin-right: 20px;
  transition: background-color 0.3s ease; 

  /* Hover effect */
  :hover {
    background-color: #2980b9;
  }
  .spaceto{
    margin-top: 40px;
  }
}

    </style>
</head>
<body>
    <div class="container">
    <h1>NAVIGATION</h1>
        <div  style="margin-top: 40px;">
            <a href="/dashboard"><button class="custom-button">Dashboard</button></a>
            <a href="/login"><button class="custom-button">Registration</button></a>
            
        </div>
    </div>
</body>
</html>