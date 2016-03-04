var labels = [];
var series = [];

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
	$( "<div class='ct-chart'></div>" ).insertAfter(tableToChart);
	$(tableToChart).css("display", "none"); // We don't need to show the list
	var chart=$('.ct-chart');
	var numOfCharts = chart.length; //let's cache the  length
	var colIndex = 1;
	for(var x=0; x<numOfCharts; x++) {
	    var currentTable = tableToChart.eq(x);
	    var currentRow = $("tr", currentTable);
	    console.log(currentTable);
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
		
		console.log(labels);
		console.log(series);
		
		new Chartist.Bar('#chartist'+ x, {
		  labels: labels,
		  series: series
		}, {
		  width: 500,
		  height: 300
		});
		
		series = [];
		labels = [];
	    
	    console.log(currentRow);
	    
	         
	}
	
	/*function parseTable() {
		
		
		 
		function grabSeries() {
			chart.eq(x).$('tr').each(function() {
				colIndex = colIndex + 1;
				var arrayOfThisRow = [];
				
				var tableData = chart.eq(x).$('tr').find('td:nth-child(' + colIndex + ')');
				
			    if (tableData.length > 0) {
			        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
			        series.push(arrayOfThisRow);
			    }
			});
		}
		grabSeries();	
	}
	parseTable();
	
	
	
	
	*/
	
	
	
	
	
	
}






