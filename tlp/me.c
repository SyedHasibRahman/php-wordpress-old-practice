#include <stdio.h>
int main(){
    int i;
    /* for loop start here */
    for(i=0; i<5 ; i++){
        /* if else statement start here */
        if(i*i >30)
        goto lbl;
        else
        {
            printf("%d,i");
            lbl:
            printf("NUBCC::::HOODIE");
        }
        return 0;
    }
}