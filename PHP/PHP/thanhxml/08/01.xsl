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
			<div>
				<!-- <xsl:value-of select="bookshop/book/title"></xsl:value-of><br/> -->
				<!-- <xsl:for-each select="bookshop/book/author"> -->
				<!-- <xsl:value-of select=".."></xsl:value-of><br/>-->
				<!-- </xsl:for-each> -->
				<xsl:value-of select="bookshop/book/@id"></xsl:value-of><br/>
				<xsl:for-each select="bookshop/book">
					<!-- <xsl:value-of select="."></xsl:value-of><br/> -->
					<xsl:value-of select="@id"></xsl:value-of><br/>
				</xsl:for-each>
			</div>
		</body>
	</xsl:template>
</xsl:stylesheet>