<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

	<xsl:template match = "/bookshop">
		<html>
			<head>
				<title> XSL Tutorial</title>
			</head>
		</html>
		<body>
			<h1> Khóa Học Lập Trình PHP 2015 </h1>
			<h3> Nhúng XSL vào tài liệu XML  </h3>
			<xsl:apply-templates/>
			
			
		</body>
	</xsl:template>
	<xsl:template match = "book">
		<ul>
					<li> Tên khóa học: <xsl:value-of select="title"></xsl:value-of></li>
					<li> Tác giả: <xsl:value-of select="author"></xsl:value-of></li>
					<li> Số trang: <xsl:value-of select="page"></xsl:value-of></li>
					<xsl:if test ="weight &gt; 400">
					<li> Khối lượng: <xsl:value-of select="weight"></xsl:value-of>
									 <xsl:value-of select="weight/@unit"></xsl:value-of>
					</li>
					</xsl:if>
					<li>
						Chú ý: 
						<xsl:choose>
							<xsl:when test ="weight/@units = 'gram'">
								Vận chuyển free
							</xsl:when>
							<xsl:otherwise>
								Vận chuyển tính phí
							</xsl:otherwise>
						</xsl:choose>
					</li>
				</ul>
				<hr/>
	</xsl:template>
</xsl:stylesheet>