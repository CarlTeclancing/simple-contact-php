enum DiskType { CD, DVD };

class Disk : public Publication {
    DiskType type;
public:
    void getdata() {
        Publication::getdata();
        char ch;
        cout << "Enter disk type (c for CD, d for DVD): ";
        cin >> ch;
        if (ch == 'c') type = CD;
        else type = DVD;
    }

    void putdata() {
        Publication::putdata();
        cout << "Disk Type: " << (type == CD ? "CD" : "DVD") << endl;
    }
};
