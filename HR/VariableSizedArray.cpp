//HR-Varable Sized Array-Introduction to C++
#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>
using namespace std;


int main() {
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    int n,q;
    int e;
    cin>>n>>q;
    int** seq=new int*[n];
    for(int i=0;i<n;i++){
        int a;
        cin>>a;
        int* b=new int [a];
        for (int j=0; j<a; j++) {

            cin>>e;
            b[j]=e;
        }
        *(seq+i)=b;
    }
    for(int i=0;i<q;i++){
        int r,s;
        cin>>r>>s;
        cout<<seq[r][s]<<endl;
    }
    return 0;
}