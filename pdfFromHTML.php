<script src="js/jspdf.js"></script>
<script>
    function HTMLtoPDF()
    {
        $('#tittle').show();
        
        var pdf = new jsPDF('p', 'pt', 'letter');
        var reportName = document.getElementById("reportName").value;


        source = $('#reportTable')[0];
        specialElementHandlers = 
        {
            '#bypassme': function(element, renderer)
            {
                return true
            }
        }

        margins = 
        {
            top: 50,
            left: 60,
            width: 545
        };

        pdf.fromHTML(
            source // HTML string or DOM elem ref.
            , margins.left // x coord
            , margins.top // y coord
            , {
                'width': margins.width // max width of content on PDF
                , 'elementHandlers': specialElementHandlers
            },

            function (dispose) 
            {
                if(reportName == "emp") 
                {
                    pdf.save('<?php echo $row['EmpName'].$row['EmpLname'] ?>Report.pdf');
                }   
                else if(reportName == "ser") 
                {
                    pdf.save('<?php echo $row['SerName'] ?>Report.pdf');
                }    
                if(reportName == "allEmp")
                {
                    pdf.save('allEmployeeReport.pdf');
                }
                else if(reportName == "allSer")
                {
                    pdf.save('allServiceReport.pdf');
                }     
                $('#tittle').hide();
            }
        )		
    }
</script>