<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	<xsl:template match = "/">
		<html>
			<head>
				<title> XSL Tutorial</title>
			</head>
		</html>
		<body>
			<h1> Khóa Học Lập Trình PHP 2015 </h1>
			<h3> Nhúng XSL vào tài liệu XML  </h3>
			<ul>
				<li> Tên khóa học: <xsl:value-of select="book/title"></xsl:value-of></li>
				<li> Tác giả: <xsl:value-of select="book/author"></xsl:value-of></li>
				<li> Số trang: <xsl:value-of select="book/page"></xsl:value-of></li>
				<li> Khối lượng: <xsl:value-of select="book/weight"></xsl:value-of>
								 <xsl:value-of select="book/weight/@unit"></xsl:value-of>
				</li>
			</ul>
		</body>
	</xsl:template>
</xsl:stylesheet>