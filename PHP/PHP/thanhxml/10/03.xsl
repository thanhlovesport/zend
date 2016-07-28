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
			<!-- Lấy những quyển sách có giá tiền lớn hơn 70 -->
			<div>
				<xsl:for-each select="//book[price/real &gt; price/saleoff ]">
					<xsl:value-of select="title"></xsl:value-of><br/>
				</xsl:for-each>
			</div>
		</body>
	</xsl:template>
</xsl:stylesheet>