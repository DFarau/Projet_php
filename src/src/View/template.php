<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link href="./../css/index.css" rel="stylesheet" type="text/css">
  <title><?= $title; ?></title>
</head>
<body>
<?php  include 'navigation.php'; ?>
<?= $content; ?>
</body>
</html>

<style>
    * {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen,
    ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial,
    sans-serif;
  font-size: 16px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
body {
  background-color: #435165;
}
.login, .post {
  width: 400px;
  background-color: #ffffff;
  box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  margin: 100px auto;
}
.login h1 {
  text-align: center;
  color: #5b6574;
  font-size: 24px;
  padding: 20px 0 20px 0;
  border-bottom: 1px solid #dee0e4;
}
.login form, .post form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-top: 20px;
}
.login form label {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  background-color: #3274d6;
  color: #ffffff;
}
.login form input[type="password"],
.login form input[type="text"] {
  width: 310px;
  height: 50px;
  border: 1px solid #dee0e4;
  margin-bottom: 20px;
  padding: 0 15px;
}
.login form input[type="submit"],
.post form input[type="submit"] {
  width: 100%;
  padding: 15px;
  margin-top: 20px;
  background-color: #3274d6;
  border: 0;
  cursor: pointer;
  font-weight: bold;
  color: #ffffff;
  transition: background-color 0.2s;
}
.login form input[type="submit"]:hover,
.post form input[type="submit"]:hover {
  background-color: #2868c7;
  transition: background-color 0.2s;
}

.navtop {
  background-color: #2f3947;
  height: 60px;
  width: 100%;
  border: 0;
}
.navtop div {
  display: flex;
  margin: 0 auto;
  width: 1000px;
  height: 100%;
}
.navtop div h1,
.navtop div a {
  display: inline-flex;
  align-items: center;
}
.navtop div h1 {
  font-size: 24px;
  padding: 0;
  margin: 0;
  color: #eaebed;
  font-weight: normal;
}

.navtop div a:first-child {
  flex: 1;
  padding: 0 0;
}

.navtop div a {
  padding: 0 20px;
  text-decoration: none;
  color: #c1c4c8;
  font-weight: bold;
}
.navtop div a i {
  padding: 2px 8px 0 0;
}
.navtop div a:hover {
  color: #eaebed;
}
section.loggedin {
  background-color: #f3f4f7;
}
.content {
  width: 1000px;
  margin: 0 auto;
}
.content h2 {
  margin: 0;
  padding: 25px 0;
  font-size: 22px;
  border-bottom: 1px solid #e0e0e3;
  color: #4a536e;
}
.content > p,
.content > div {
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
  margin: 25px 0;
  padding: 25px;
  background-color: #fff;
}
.content > p table td,
.content > div table td {
  padding: 5px;
}
.content > p table td:first-child,
.content > div table td:first-child {
  font-weight: bold;
  color: #4a536e;
  padding-right: 15px;
}
.content > div p {
  padding: 5px;
  margin: 0 0 10px 0;
}

</style>