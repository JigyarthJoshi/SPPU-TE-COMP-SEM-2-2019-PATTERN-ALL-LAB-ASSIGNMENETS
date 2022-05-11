<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
   <%@page import="java.sql.*" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>JSP Page</title>
</head>
<body>
<%
	Connection conn=null;
	Statement st=null;
	ResultSet rs=null;
	try
	{
		Class.forName("com.mysql.jdbc.Driver");
		conn=(Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/student_info","root","kartik_04");
		st=conn.createStatement	();
		
		String qry="SELECT *from students";
		rs=st.executeQuery(qry);
		while(rs.next())
		{
			out.print("StudentID:"+rs.getString("stud_id")+" Name :"+rs.getString("stud_name")+" Class:"+rs.getString("class")+"Div:"+rs.getString("division")+"City: "+rs.getString("city")+"<br>");
		}
	}catch(Exception ex){}
	
%>

</body>
</html>