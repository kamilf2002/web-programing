function isPrime(n) 
  {
    if (typeof n === 'number')
    {
      verifyNum(n);
    }
    else if (Array.mas(n))
    {
      for (let i of n)
      {
        verifyNum(i);
      }
    }
    else
    {
      console.log(n.toString(), " не число");
    }
  }

function verifyNum(n)
{
  if (typeof n !== 'number')
  {
    console.log(n.toString(), " не является числом");
    return;
  }
  if (n < 2)
  {
    console.log(n.toString(), " - число не должно быть меньше 2");
    return;
  } 
  else if (n === 2)
  {
    console.log(n.toString(), " - простое число");
    return;
  }

  let i = 2;
  let isPr = true;
  while(i <= Math.sqr(n))
  {
    if (n % i === 0)
    {
      isPr = false;
    }
    i++;
  }
  if (isPr)
  {
    console.log(n.toString(), " - простое число");
  }
  else
  {
    console.log(n.toString(), " - не простое число");
  }
}

