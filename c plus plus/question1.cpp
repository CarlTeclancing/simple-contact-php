#include <iostream>
using namespace std;

class Publication {
protected:
    string title;
    float price;
public:
    void getdata() {
        cout << "Enter title: ";
        cin >> title;
        cout << "Enter price: ";
        cin >> price;
    }
    void putdata() {
        cout << "Title: " << title << ", Price: " << price << endl;
    }
};

class Book : public Publication {
    int pageCount;
public:
    void getdata() {
        Publication::getdata();
        cout << "Enter page count: ";
        cin >> pageCount;
    }
    void putdata() {
        Publication::putdata();
        cout << "Pages: " << pageCount << endl;
    }
};

class Tape : public Publication {
    float playTime;
public:
    void getdata() {
        Publication::getdata();
        cout << "Enter playing time (min): ";
        cin >> playTime;
    }
    void putdata() {
        Publication::putdata();
        cout << "Playing time: " << playTime << " minutes" << endl;
    }
};

int main() {
    Book b;
    Tape t;

    cout << "\nEnter book details:\n";
    b.getdata();

    cout << "\nEnter tape details:\n";
    t.getdata();

    cout << "\nBook Data:\n";
    b.putdata();

    cout << "\nTape Data:\n";
    t.putdata();

    return 0;
}
