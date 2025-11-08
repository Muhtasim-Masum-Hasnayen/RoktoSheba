module com.example.roktosheba {
    requires javafx.controls;
    requires javafx.fxml;


    opens com.example.roktosheba to javafx.fxml;
    exports com.example.roktosheba;
}