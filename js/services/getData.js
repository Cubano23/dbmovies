
   
   let fragment = document.createDocumentFragment(),
   newImg = document.createElement("img");
   newImg.setAttribute('class','img-poster');

   let fragment2 = document.createDocumentFragment(),
   title = document.createElement("p");

   let a = [];
   let b = [];
   let c = [];
   let index = 0;

   function performSearch(searchTerm){
    document.getElementById('title-film').innerHTML = "";
    document.getElementById('gallery').innerHTML = "";

   fetch("https://api.themoviedb.org/3/search/movie?api_key=1b5adf76a72a13bad99b8fc0c68cb085&query=" + searchTerm)

    .then((response) => { response.json()
            .then((value) => {
                fragment.appendChild(newImg);
                fragment.appendChild(title);
                for(var i = 0; i < value.results.length; i++){
                    

                    var arr = value.results[i].release_date.split("-");                 
                    var year = arr[0];         
                    var name = value.results[i].title;
                    var overview = value.results[i].overview;

                    a.push(name);
                    b.push(year); 
                    c.push(overview);
                    newImg.src = "https://image.tmdb.org/t/p/w185" + value.results[i].poster_path;
                                        
                    if(value.results[i].poster_path == null){
                        newImg.src = "../images/noimage.jpg";                       
                    }
                    newImg.setAttribute('onclick',"readMore(\""+ a[index].replace(/[^a-zA-Z ]/g, "") + "," + b[index] +","+value.results[i].poster_path+","+value.results[i].id+","+c[index].replace(/[^a-zA-Z ]/g, "") +"\");");                   
                    fragment.appendChild(newImg.cloneNode(true));
                    title.innerHTML = value.results[i].title + "<p>" + value.results[i].release_date + 
                    "</p>" + "<p>Popularity:</p> " + "<div class='popularity'>" + value.results[i].popularity + "</div>";                 
                    fragment.appendChild(title.cloneNode(true));
                    index++;                                     
                }
                document.getElementById('gallery').appendChild(fragment);
                document.getElementById('title-film').appendChild(fragment);                   
                console.log(value.results);                                        
               
             
            });
            
    });
    

}















