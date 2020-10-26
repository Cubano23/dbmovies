$(document).ready(function () {

    $('.third-button').on('click', function () {
  
      $('.animated-icon3').toggleClass('open');
    });
  });
  function playTrailer(x){ 
    let params = x.split(",");
    let name = params[0];
    let year = params[1];
    let url = '../afficher_video/play.php?name='+name+'&year='+year;
    window.location = url;
}
function readMore(y){
    let params = y.split(",");
    let title = params[0];
    let year = params[1];
    let poster = params[2];
    let id = params[3];
    let overview = params[4];
    let url = `../detail/detail.php?title=${title}&year=${year}&poster=${poster}&id=${id}&overview=${overview}`;
    window.location = url;
}
$('html').bind('keypress', function(e)
{
   if(e.keyCode == 13)
   {
      var field = document.createElement('input');
      field.setAttribute('type', 'text');
      document.body.appendChild(field);
      
      setTimeout(function() {
          field.focus();
          setTimeout(function() {
              field.setAttribute('style', 'display:none;');
          }, 50);
      }, 50);
        return false;
   }
});
function addFilmToCart(movie)
{ 
  let params = movie.split(",");
  let poster;
  let title = params[0];
  let year = params[1];
  console.log(params[2])
    //si la photo est null
    if(params[2].length == 4)
    {
      poster = '../images/noimage.jpg';
    }
    else
    {
      poster = "https://image.tmdb.org/t/p/w185"+params[2];
    } 
  let id = params[3];
  let prix = params[4];
  let okCart = "<i class='fas fa-check'></i>";

  // ctte ligne va chopper dans le localStorage le panier enregistré
  var tableauAdd = JSON.parse(localStorage.getItem("films"));

  // si c'est null, je crée un tableau vide
  if (tableauAdd == null){
    tableauAdd = [];
  }

    var tableau = new Object();
    tableau.Photo = `<img src=${poster} class="posterCart">`;
    tableau.Titre = title;
    tableau.Annee = year;     
    tableau.id = id; 
    tableau.Prix = prix;
  
    // j'ajoute a mon tableau des films.
    tableauAdd.push(tableau);
      const films = localStorage.getItem('films'); 
      let filmExists = false;
      if (films) {
        const filmsData = JSON.parse(films);
    //verification si le film est déjà dans le panier
        filmExists =  filmsData.find(film => film.id === id);
        if(filmExists){
          alert('Film déjà ajouté au panier');
          return;
        }        

      }
    // je stocke dans mon localStorage mon tableau du films, me permettra de recharger mon panier
    // localStorage n'accepte que JSON, je stringify (je transforme en chaine de caractere le tableau) 
    window.localStorage.setItem("films", JSON.stringify(tableauAdd)); 

    //afficher un icon sur le bouton "Ajouter au panier"
    document.getElementById("countCart").innerHTML = okCart;
  

}
//ici en vide le panier si l'utilisateur clique sur le button Déconnexion
$(function() {
  document.getElementById('logout').addEventListener("click", function() {
    localStorage.clear();
  });
});
//vide le panier si: fermer l'onglet ou bien fermer le navegateur
window.onbeforeunload = function (e) {

  window.localStorage.unloadTime = JSON.stringify(new Date());
  
  };  
window.onload = function () {
  
  let loadTime = new Date();
  let unloadTime = new Date(JSON.parse(window.localStorage.unloadTime));
  let refreshTime = loadTime.getTime() - unloadTime.getTime();
  
  if(refreshTime>3000)//3000 milliseconds
  {
  window.localStorage.removeItem("films");
  }
  
  };
  function supprimerFilm(formId)
  {
    if (confirm("Êtes-vous sûr de vouloir supprimer le film?") == true) {
      document.getElementById(formId).submit();
    
    } else {
      return;
    }  

}
function setLike(user_id,movie_id)
{
  let lk = 1;
  let url = '../controller/LikeUnlike.php?movie_id='+movie_id+'&user_id='+user_id+'&like='+lk; 
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    location.reload();
      if (xhr.readyState == XMLHttpRequest.DONE) {
          //alert(xhr.responseText);         
      }
  }
  xhr.open('GET', url, true);
  xhr.send(null);
  }
  function setUnlike(user_id,movie_id)
{
  let lk = 0;
  let url = '../controller/LikeUnlike.php?movie_id='+movie_id+'&user_id='+user_id+'&like='+lk;
                                                                                             
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    location.reload();
      if (xhr.readyState == XMLHttpRequest.DONE) {
          //alert(xhr.responseText);        
      }
  }
  xhr.open('GET', url, true);
  xhr.send(null);
  }


  
  




