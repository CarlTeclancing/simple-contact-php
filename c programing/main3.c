#include <stdio.h>

int divideByThree(int n) {
    if (n <= 3)
        return 1;
    return 1 + divideByThree(n - 3);
}

int main() {
    int number = 81;
    int result = divideByThree(number);
    printf("Result of division: %d\n", result);
    return 0;
}
