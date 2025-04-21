class Sales {
    protected:
        float sales[3];
    public:
        void getdata() {
            cout << "Enter sales for 3 months: ";
            for (int i = 0; i < 3; i++) {
                cin >> sales[i];
            }
        }
        void putdata() {
            cout << "Sales: ";
            for (int i = 0; i < 3; i++) {
                cout << sales[i] << " ";
            }
            cout << endl;
        }
    };
    
    class SalesBook : public Book, public Sales {
    public:
        void getdata() {
            Book::getdata();
            Sales::getdata();
        }
        void putdata() {
            Book::putdata();
            Sales::putdata();
        }
    };
    
    class SalesTape : public Tape, public Sales {
    public:
        void getdata() {
            Tape::getdata();
            Sales::getdata();
        }
        void putdata() {
            Tape::putdata();
            Sales::putdata();
        }
    };
    