#include<stdio.h>
 int main()
   {
       int T1,D2,option,result;
       float pi=3.1416,result_cir;
       char D;

        printf("\npress 0 for area of Triangle. ");
        printf("\npress 9 for area of rectangle. ");
        printf("\npress 8 for area of square. ");
        printf("\npress 7 for area of circle. ");
    do{
       printf("\nchoose your option:");
       scanf("%d",&option);
       printf("\nEnter number 1:");
       scanf("%d",&T1);
       printf("\nEnter number 2:");
       scanf("%d",&D2);
  switch(option)
          {
              case 0: result=(T1*D2)/2;
              printf("You choose option 0 RESULT=%d",result);
              break;
              case 9: result=(T1*D2);
              printf("You choose option 9 RESULT=%d",result);
              break;
              case 8: result=(T1*T1);
              printf("You choose option 8 RESULT=%d",result);
              break;
              case 7:result_cir= pi*T1*T1;
              printf("You choose option 7 RESULT=%f",result_cir);
              break;
              default:
                printf("Wrong input.");

             }
          printf("\n\n\npress t or T to continue: ");
          scanf(" %c",&D);
          printf("%c",D);
       } while(D=='T' || D=='t');


   }