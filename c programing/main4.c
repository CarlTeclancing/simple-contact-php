#include <stdio.h>
#include <string.h>

struct Candidate {
    char name[30];
    int age;
    int votes;
};

int main() {
    struct Candidate candidates[5] = {
        {"Paul Biya", 90, 0},
        {"Kamto", 65, 0},
        {"Joeshua Osi", 50, 0},
        {"Cabral Linii", 45, 0},
        {"Adamu Dam Njoya", 70, 0}
    };

    int voters, i, choice;

    printf("Enter number of registered voters: ");
    scanf("%d", &voters);

    for (i = 0; i < voters; i++) {
        printf("Voter %d, vote for candidate (1-5):\n", i + 1);
        for (int j = 0; j < 5; j++) {
            printf("%d. %s\n", j + 1, candidates[j].name);
        }
        scanf("%d", &choice);
        if (choice >= 1 && choice <= 5) {
            candidates[choice - 1].votes++;
        } else {
            printf("Invalid vote.\n");
        }
    }

    // Sort by votes (descending)
    struct Candidate temp;
    for (i = 0; i < 4; i++) {
        for (int j = i + 1; j < 5; j++) {
            if (candidates[j].votes > candidates[i].votes) {
                temp = candidates[i];
                candidates[i] = candidates[j];
                candidates[j] = temp;
            }
        }
    }

    printf("\nElection Results:\n");
    printf("Name\t\tAge\tVotes\n");
    for (i = 0; i < 5; i++) {
        printf("%s\t%d\t%d\n", candidates[i].name, candidates[i].age, candidates[i].votes);
    }

    return 0;
}
