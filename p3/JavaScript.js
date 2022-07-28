//maximum
function myMax()
{
    a = document.getElementById("n1").value;
    b = document.getElementById("n2").value;
    c = document.getElementById("n3").value;
    document.getElementById("maxVal").innerHTML = Math.max(a, b, c);
}

//minimum
function myMin()
{
    a = document.getElementById("n1").value;
    b = document.getElementById("n2").value;
    c = document.getElementById("n3").value;
    document.getElementById("minVal").innerHTML = Math.min(a, b, c);
}

//average (arithmetic mean)
function myAve()
{
    
    a = document.getElementById("n1").value;
    b = document.getElementById("n2").value;
    c = document.getElementById("n3").value
    var avg = (Number(a) + Number(b) + Number(c)) / 3;
    document.getElementById("aveVal").innerHTML = avg.toFixed(2);
}

//median
function myMed()
{
    a = document.getElementById("n1").value;
    b = document.getElementById("n2").value;
    c = document.getElementById("n3").value;
    
    if (a == Math.max(a, b, c) && b == Math.min(a, b, c))
        {
            med = c;
        }else if(b == Math.max(a, b, c) && c == Math.min(a, b, c))
        {
            med = a;
        }else
        {
            med = b;
        }
    document.getElementById("medVal").innerHTML = med;
}

// range (max - min)
function myRan()
{
    a = document.getElementById("n1").value;
    b = document.getElementById("n2").value;
    c = document.getElementById("n3").value;
    document.getElementById("ranVal").innerHTML = Math.max(a, b, c) - Math.min(a, b, c);
}