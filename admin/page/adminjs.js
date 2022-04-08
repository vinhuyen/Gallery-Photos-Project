 function dashboard() {
     // document.getElementById('create').style.display = 'none';
     document.getElementById('product').style.display = 'none';
     document.getElementById('bill').style.display = 'none';
     document.getElementById('user').style.display = 'none';
     document.getElementById('home-content').style.display = 'block';

 };


 function photoManager() {
     document.getElementById('create').style.display = 'block';
     document.getElementById('product').style.display = 'block';
     document.getElementById('bill').style.display = 'none';
     document.getElementById('user').style.display = 'none';
     document.getElementById('home-content').style.display = 'none';
 };

 function userManager() {
     document.getElementById('create').style.display = 'none';
     document.getElementById('product').style.display = 'none';
     document.getElementById('bill').style.display = 'none';
     document.getElementById('home-content').style.display = 'none';
     document.getElementById('user').style.display = 'block';
 };

 function billManager() {
     document.getElementById('home-content').style.display = 'none';
     document.getElementById('bill').style.display = 'block';
     // document.getElementById('create').style.display = 'none';
     document.getElementById('product').style.display = 'none';
     document.getElementById('user').style.display = 'none';
 };