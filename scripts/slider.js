var x = window.matchMedia("(min-width: 901px)")

if (x.matches)
{
        ///////////////////////////////////////////////////////////
    //// Automatically adapts the number of dots of the pagination according to the number of images. ///////
    //// Adapte automatiquement le nombre de points de la pagination en fonction du nombre d'images. /////////
    ///////////////////////////////////////////////////////////


    let nbrImages = document.querySelectorAll('.imgs--all div');
    let paginationDots = document.querySelector('.container--pagination');

    for (let i=0;  i < nbrImages.length ; i++)
    {
        let spanAdd = document.createElement("SPAN");
        paginationDots.appendChild(spanAdd);
        spanAdd.classList.add('pagination--none')
    };





    ///////////////////////////////////////////////////////////
    // Scrolls through the images by clicking on the Previous and Next buttons. And adjusts the color of the points accordingly. ///////
    // Fait défiler les images selon un clique sur les boutons Précédent et Suivant. Et adapte la couleur des points en conséquence. ///////////
    ///////////////////////////////////////////////////////////


    let previous = document.querySelector('.previous');
    let next = document.querySelector('.next');
    let imgsAll = document.querySelector('.imgs--all');
    let positionImage = 0;
    let move = 0;

    let previousImage = 0; // Stock the position of the previous image / / Stock la position de l'image précédente.



    previous.addEventListener( 'click', () =>
    {
        if ( positionImage > 0 && positionImage <= nbrImages.length) {
            positionImage -= 1;
            let move = +70 * ( - positionImage );
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        } else
        {
            positionImage = nbrImages.length - 1;
            let moveNext = +70 * ( - positionImage );
            imgsAll.style.transform = "translateX("+ moveNext +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        }

        
        let paginationDotsImageOnViews = document.querySelectorAll('.container--pagination span');

        for (let i = 0; i < paginationDotsImageOnViews.length; i++) 
        {
            if (i == positionImage) 
            {
                paginationDotsImageOnViews[i].className = "pagination--on";
            } 

            else
            {
                paginationDotsImageOnViews[i].className = "pagination--none";
            }
        };
        
    });


    next.addEventListener( 'click', () =>
    {
        if ( positionImage < nbrImages.length - 1) {

            positionImage += 1;
            let move = -70 * positionImage;
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        } else
        {
            positionImage = 0;
            let move = -70 * positionImage;
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        }

        let paginationDotsImageOnViews = document.querySelectorAll('.container--pagination span');

        for (let i = 0; i < paginationDotsImageOnViews.length; i++) 
        {
            if (i == positionImage) 
            {
                paginationDotsImageOnViews[i].className = "pagination--on";
            } 

            else
            {
                paginationDotsImageOnViews[i].className = "pagination--none";
            }
        };
        
    });


    ///////////////////////////////////////////////////////////
    // When clicking on a dot in position x, displays the image in position x. And made the color changes of the dots. ///////
    // Lors d'un clique sur un point en position x, affiche l'image en position x. Et fait les changements de couleur des points. ///////////
    ///////////////////////////////////////////////////////////

    let paginationDotsImageOnViews = document.querySelectorAll('.container--pagination span');


    for (let i = 0; i < paginationDotsImageOnViews.length; i++) 
    {

    if (i == positionImage) {
        paginationDotsImageOnViews[i].className = "pagination--on";
        } 

        paginationDotsImageOnViews[i].addEventListener( 'click', () =>
        {
            positionImage = i;
            let move = -70 * positionImage;
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            paginationDotsImageOnViews[i].className = "pagination--on";
            paginationDotsImageOnViews[previousImage].className = "pagination--none";
            previousImage = i;

        });
    };
} else 
{
            ///////////////////////////////////////////////////////////
    //// Automatically adapts the number of dots of the pagination according to the number of images. ///////
    //// Adapte automatiquement le nombre de points de la pagination en fonction du nombre d'images. /////////
    ///////////////////////////////////////////////////////////


    let nbrImages = document.querySelectorAll('.imgs--all div');
    let paginationDots = document.querySelector('.container--pagination');

    for (let i=0;  i < nbrImages.length ; i++)
    {
        let spanAdd = document.createElement("SPAN");
        paginationDots.appendChild(spanAdd);
        spanAdd.classList.add('pagination--none')
    };





    ///////////////////////////////////////////////////////////
    // Scrolls through the images by clicking on the Previous and Next buttons. And adjusts the color of the points accordingly. ///////
    // Fait défiler les images selon un clique sur les boutons Précédent et Suivant. Et adapte la couleur des points en conséquence. ///////////
    ///////////////////////////////////////////////////////////


    let previous = document.querySelector('.previous');
    let next = document.querySelector('.next');
    let imgsAll = document.querySelector('.imgs--all');
    let positionImage = 0;
    let move = 0;

    let previousImage = 0; // Stock the position of the previous image / / Stock la position de l'image précédente.



    previous.addEventListener( 'click', () =>
    {
        if ( positionImage > 0 && positionImage <= nbrImages.length) {
            positionImage -= 1;
            let move = +90 * ( - positionImage );
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        } else
        {
            positionImage = nbrImages.length - 1;
            let moveNext = +90 * ( - positionImage );
            imgsAll.style.transform = "translateX("+ moveNext +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        }

        
        let paginationDotsImageOnViews = document.querySelectorAll('.container--pagination span');

        for (let i = 0; i < paginationDotsImageOnViews.length; i++) 
        {
            if (i == positionImage) 
            {
                paginationDotsImageOnViews[i].className = "pagination--on";
            } 

            else
            {
                paginationDotsImageOnViews[i].className = "pagination--none";
            }
        };
        
    });


    next.addEventListener( 'click', () =>
    {
        if ( positionImage < nbrImages.length - 1) {

            positionImage += 1;
            let move = -90 * positionImage;
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        } else
        {
            positionImage = 0;
            let move = -90 * positionImage;
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            previousImage = positionImage;

        }

        let paginationDotsImageOnViews = document.querySelectorAll('.container--pagination span');

        for (let i = 0; i < paginationDotsImageOnViews.length; i++) 
        {
            if (i == positionImage) 
            {
                paginationDotsImageOnViews[i].className = "pagination--on";
            } 

            else
            {
                paginationDotsImageOnViews[i].className = "pagination--none";
            }
        };
        
    });


    ///////////////////////////////////////////////////////////
    // When clicking on a dot in position x, displays the image in position x. And made the color changes of the dots. ///////
    // Lors d'un clique sur un point en position x, affiche l'image en position x. Et fait les changements de couleur des points. ///////////
    ///////////////////////////////////////////////////////////

    let paginationDotsImageOnViews = document.querySelectorAll('.container--pagination span');


    for (let i = 0; i < paginationDotsImageOnViews.length; i++) 
    {

    if (i == positionImage) {
        paginationDotsImageOnViews[i].className = "pagination--on";
        } 

        paginationDotsImageOnViews[i].addEventListener( 'click', () =>
        {
            positionImage = i;
            let move = -90 * positionImage;
            imgsAll.style.transform = "translateX("+ move +"vw)";
            imgsAll.style.transition = "all 1.5s ease";
            paginationDotsImageOnViews[i].className = "pagination--on";
            paginationDotsImageOnViews[previousImage].className = "pagination--none";
            previousImage = i;

        });
    };
}


