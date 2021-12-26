window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        exportEnabled: true,
        theme: "light1", // "light1", "light2", "dark1", "dark2"
        title:{
            
        },
          axisY: {
          includeZero: true,
          title :"Impacted Users"
        },

        axisX: {
            includeZero: true,
            title :"Users Impacted"
          },

        data: [{
            type: "column", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
              indexLabelFontSize: 16,
            indexLabelPlacement: "outside",
            dataPoints: [
                { x: 1, y: 250000000, label: "Microsoft" },
                { x: 2, y: 533000000, label: "Facebook" },
                { x: 3, y: 383000000, label: "Marriot Hotels" },
                { x: 4, y: 330000000, label:"Twitter"  },
                { x: 5, y: 1000000000,label: "Yahoo" }
                
            ]
        }]
    });
    chart.render();
    
//indexLabel:

    }