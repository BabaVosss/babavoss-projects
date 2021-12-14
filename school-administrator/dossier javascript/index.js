window.onload = () => {

    // permet de filtrer les cpours a afficher en fonction de la classe choisi 


    /*document.querySelector('.classe').addEventListener("change", function(){
        let classe = "cours_"+this.value+".php"
        let cont = document.querySelector(".content");
        let neww = document.createElement("div");
        neww.setAttribute("id","calendrier");
        cont.replaceChild(neww,document.getElementById("calendrier"));

        let calendar = new FullCalendar.Calendar(neww, {
            // On charge le composant "dayGrid"
            plugins: ['dayGrid', 'timeGrid' , 'list','interaction'],
            defaultView: 'timeGridWeek',
            locale: 'fr',
            editable: true,
            eventLimit: true,
            header: {
                left: 'timeGridWeek,list',
                center: 'title',
                right: 'prev,next'
            },
            buttonText: {
                week: 'vue semaine',
                list: 'vue liste'
            },


            //recuperation des evenements a partire d'un fichier php
            events: classe,

             eventDrop:(infos)=>{

            // sy = strat year
                let sy = infos.event.start.getFullYear();
             // sm = start month 
                let sm = infos.event.start.getUTCMonth() +1; 
                let sd = infos.event.start.getDate(); 
                let sh = infos.event.start.getHours(); 
                let smn = infos.event.start.getMinutes();
                
             // ey = end year
                let ey = infos.event.end.getFullYear(); 
             // em = end month
                let em = infos.event.end.getUTCMonth() +1; 
                let ed = infos.event.end.getDate(); 
                let eh = infos.event.end.getHours(); 
                let emn = infos.event.end.getMinutes(); 

                let ID = infos.event.id;
                let START = sy+"-"+sm+"-"+sd+" "+sh+":"+smn;
                let END = ey+"-"+em+"-"+ed+" "+eh+":"+emn; 

                
                const cour = {
                    "id" : ID,
                    "start" : START,
                    "end" : END
                };
                let element = JSON.stringify(cour);
                
                console.log(cour);

                $.ajax({
                    url :'drag_cour.php',
                    dataType : 'json',
                    type : 'post',
                    data : {cour : JSON.stringify(cour)},
                    success : function(reponse){
                        console.log(reponse);
                    }

                })

               
            }
        });
        
           
        // On affiche le calendrier
        calendar.render();


        
    });
    */
}