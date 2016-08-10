#include<iostream>
#include<stdio.h>
#include<conio.h>
#include<algorithm>
using namespace std;

int po1,po2;
void median(int n)
{
	if(n&1)
	{
		po1=n/2+1;
		po2=po1;
	}
	else
	{
		po1=n/2;
		po2=n/2+1;
	}
}


int main()
{
	int n;
	int pos1,pos2;
	float med;
	float bl,lq,uq;
	
	float lt,ut;
	printf("Enter Number of values ");
	scanf("%d",&n);
	cout<<endl;
	int a[n];
	printf("Enter those %d values",n);
	cout<<endl;
	for(int i=0;i<n;i++)
	{
		scanf("%d",&a[i]);
	}
	sort(a,a+n);
	median(n);
	cout<<po1<<endl<<po2<<endl;
	med=(a[po1-1]+a[po2-1])/2.0;
	int x=po2;
	median(po1-1);
	cout<<po1<<endl<<po2;
	lq=(a[po1-1]+a[po2-1])/2.0;
	uq=(a[x+po1-1]+a[x+po2-1])/2.0;
	bl=uq-lq;
	lt=(float)lq-1.5*(bl);
	ut=(float)uq+1.5*(bl);
	cout<<"LQ is "<<lq<<endl;
	cout<<"UQ is "<<uq<<endl;
	cout<<"BL is "<<bl<<endl;
	cout<<"LT is "<<lt<<endl;
	cout<<"UT is "<<ut<<endl;
	for(int i=0;i<n;i++)
	{
		if((a[i]>ut)&&(a[i]<lt))
			cout<<"Outlier : "<<a[i]<<endl;
	}
}

/* 
Enter Number of values 14

Enter those 14 values
1 2 3 4 5 6 7 8 9 10 11 12 13 14
7
8
3
4LQ is 3.5
UQ is 11.5
BL is 8
LT is -8.5
UT is 23.5

*/

/*if(n%2==0)
	{
		pos1=(n/2);
		pos2=(n/2)+1;
		int uqmed=pos2+(pos2/2);
		med=(float)((float)a[n/2]+(float)a[n/2-1])/2;
		lq=(float)((float)a[pos1/2]+(float)a[pos1/2-1])/2;
		uq=a[uqmed];
	}
	else
	{
		pos1=n/2;
		pos2=pos1;
		int uqmed=pos2+(pos2/2);
		med=a[n/2];
		lq=a[pos1/2];
		uq=a[uqmed];
	}
*/
/*
logic
1             
2
3
4...
5
6
7
8..
9..
10
11
12
13...
14
15
16

1
2..
3


1
2
3
4...
5
6
7
8..
9
10
11
12...
13
14
15

1
2
3...
4...
5
6
7..
8..
9
10
11...
12...
13
14*/
