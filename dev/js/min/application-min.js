function supportsSvg(){return document.implementation&&(document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Shape","1.0")||document.implementation.hasFeature("SVG","1.0"))}var labels=[],series=[];if(supportsSvg()){var tableToChart=$(".table-to-chart");$("<div class='ct-chart'></div>").insertAfter(tableToChart),$(tableToChart).css("display","none");for(var chart=$(".ct-chart"),numOfCharts=chart.length,colIndex=1,x=0;numOfCharts>x;x++){var currentTable=tableToChart.eq(x),currentRow=$("tr",currentTable);console.log(currentTable),chart.eq(x).prop("id","chartist"+x),$(currentRow).not(":first").each(function(){var t=$(this).find("td:nth-child("+colIndex+")").text();labels.push(t)}),$(currentRow).each(function(){colIndex+=1;var t=[],e=currentRow.find("td:nth-child("+colIndex+")");e.length>0&&(e.each(function(){t.push($(this).text())}),series.push(t))}),new Chartist.Bar("#chartist"+x,{labels:labels,series:series},{width:500,height:300}),series.length=0,labels.length=0,console.log(currentRow)}console.log(labels),console.log(series)}