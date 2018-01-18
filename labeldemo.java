import java.awt.*;
import java.applet.*;

/*
<applet code="labeldemo" width=300 height=300>
</applet>
*/

public class labeldemo extends Applet{

public void init(){

Label one=new Label("One");
Label two=new Label("two");
Label three=new Label("Three");

add(one);
add(two);
add(three);
}
	

}