<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<h1>Employee database</h1>
<table border="1">
<tr>
<th>Name</th>
<th>Address</th>
<th>EmailID</th>
<th>Salary</th>
</tr>
<xsl:for-each select="Employee/Personal-details">
<tr>
<td><xsl:value-of select="name"/></td>
<td><xsl:value-of select="address"/></td>
<td><xsl:value-of select="emailid"/></td>
<td><xsl:value-of select="salary"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
