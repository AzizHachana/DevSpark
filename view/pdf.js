window.onload = function(){
    document.getElementById("download").addEventListener("click",()=>{
         const backOfficeData = this.document.getElementById("backOfficeData");
         const options = {
            filename: 'back_office.pdf', // Nom du fichier PDF
            image: { type: 'jpeg', quality: 1 }, // Format et qualité de l'image
            html2canvas: { scale: 2 }, // Échelle de conversion HTML vers Canvas
            jsPDF: { format: 'a3', orientation: 'portrait' }, // Format et orientation du PDF
            pagebreak: { mode: 'avoid-all' }
        };

        // Générer le PDF à partir de la balise <div> avec html2pdf
        html2pdf().from(backOfficeData).set(options).save();
    })
}
