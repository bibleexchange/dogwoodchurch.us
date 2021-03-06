//Converts HTML table to Chartist Chart

//tests for SVG support
function supportsSvg() {
  return document.implementation &&
    (
      document.implementation.hasFeature('http://www.w3.org/TR/SVG11/feature#Shape', '1.0') ||
      document.implementation.hasFeature('SVG', '1.0')
    );
}


if (supportsSvg()) {

	var tableToChart=$('.table-to-chart');
	$( "<div class='ct-chart ct-minor-seventh'></div>" ).insertAfter(tableToChart);
	$(tableToChart).css("display", "none"); // We don't need to show the list
	var chart=$('.ct-chart');
	var numOfCharts = chart.length; //let's cache the  length
	for(var x=0; x<numOfCharts; x++) {
		var colIndex = 1;
	    var currentTable = tableToChart.eq(x);
	    var currentRow = $("tr", currentTable);
	    var series = [];
		var labels = [];
	    //adds unique id to each selected element
	    chart.eq(x).prop('id', 'chartist' + x);
	    //Get the contents of the contents of first column and send them to series array
	    $(currentRow).not(":first").each(function() {
		    // find the first td in the row
		    var value = $(this).find('td:nth-child(' + colIndex + ')').text();
		    // display the value in console
		    labels.push(value);
		});
		$(currentRow).each(function() {
			colIndex = colIndex + 1;
			var arrayOfThisRow = [];
			
			var tableData = (currentRow).find('td:nth-child(' + colIndex + ')');
			
		    if (tableData.length > 0) {
		        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
		        series.push(arrayOfThisRow);
		    }
		});
		var chartAni = new Chartist.Bar('#chartist'+ x, {
		  labels: labels,
		  series: series
		});	
		
		chartAni.on('draw', function(data) {
		  if(data.type === 'bar') {
		    data.element.animate({
		      y2: {
		        dur: 2000,
		        from: data.y1,
		        to: data.y2,
		        easing: Chartist.Svg.Easing.easeOutQuint
		      },
		      opacity: {
		        dur: 1000,
		        from: 0,
		        to: 1,
		        easing: Chartist.Svg.Easing.easeOutQuint
		      }
		    });
		  }
		});    
	         
	}	
}