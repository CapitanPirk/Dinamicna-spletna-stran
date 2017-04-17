

.menu{
	list-style-type: none;
    margin: 0%;
    padding: 0%;
    overflow: hidden;
    background-color: #333;
    display: inline;
}


/*TUKAJ OPISUJEM MENI */

ul.menu li {
	float: left;
}

ul.menu li a {
    display: inline-block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
    width:100px;
}

ul.menu li a:hover {
	background-color: #555;
}

ul.menu li.icon {
	display: none;
}

@media screen and (max-width:680px) {
  ul.menu li:not(:first-child) {display: none;}
  ul.menu li.icon {
    float: right;
    display: inline-block;
      }
}

@media screen and (max-width:680px) {
  ul.menu.responsive {position: relative;}
  ul.menu.responsive li.icon {
    position: fixed;
    right: 15px;
    top: 0;
  }
  ul.menu.responsive li {
    float: none;
    display: inline;
  }
  ul.menu.responsive li a {
    display: block;
    text-align: left;
  }
}
/* ==========================================================================
   random bits and pieces
   ========================================================================== */
.jumbotron{
	  background-image: url("../img/ozadje.jpg");
      background-size: cover;
	  background-color: black;
	  color: black;
	}

.important{
	font-size: 20px
}

.content{
	background-color:  #f6ddcc ;
	padding-right: 10px;
 	padding-left: 10px;
  	margin-right: auto;
  	margin-left: auto;
}

body{
	background-color: #fbeee6;
}


.btn-costum {
    padding: 5px 5px;
    font-size: 252px;
    border-radius: 558px;
}

.video-container {
position: relative;
padding-bottom: 56.25%;
padding-top: 30px; height: 0; overflow: hidden;
}
 
/*self explanatory */

.video-container iframe,
.video-container object,
.video-container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}
