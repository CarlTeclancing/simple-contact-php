#include <stdio.h>
#include <string.h>

int main() {
    char passdigit[10];

    do {
        printf("Enter the passdigit: ");
        scanf("%s", passdigit);
    } while (strcmp(passdigit, "1234") != 0);

    printf("Condition is satisfied, you may have access.\n");
    return 0;
}
