// JavaScript source code
var GSA = GSA || {};

GSA.ErzeugeTabelle = function ()
{
    if ( arguments.length > 0)
    {
        // mindestens ein Parameter ist vorhanden

        var para = arguments[0];  // muss ein Array von Objekten sein
        
        // Knotenstruktur erstellen
        var tabelle = document.createElement("table");  // <table></table>
        tabelle.className = "tabClass";

        // HeadLine erzeugen
        var hl = document.createElement("tr"); // <tr></tr>
        tabelle.appendChild(hl);

        // Spalten erzeugen
        var obj = para[0];

        for (var x in obj)
        {
            var col = document.createElement('th');
            var tk = document.createTextNode(x);
            col.appendChild(tk);

            hl.appendChild(col);
        }

        // Datenzeilen erzeugen


        for (var i = 0; i < para.length; i++)
        {
            var item = para[i];
            var dl = document.createElement("tr"); // <tr></tr>
            tabelle.appendChild(dl);


            for (var x in item)
            {
                var col = document.createElement('td');
                var tk = document.createTextNode(item[x]);
                col.appendChild(tk);

                dl.appendChild(col);
            }
          

        }




        
        // Ende
        return tabelle;

    }
}
