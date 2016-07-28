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
				
				<xsl:value-of select="bookshop/book[last()]"></xsl:value-of><br/>
				<!-- Nếu in phần tử kế cuối => last() -1 -->
				<!-- Nếu in tên quyển sách phần tử kế cuối => last() -1 (title) -->
			</div>
		</body>
	</xsl:template>
</xsl:stylesheet>