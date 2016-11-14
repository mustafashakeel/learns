<?xml version="1.0" encoding="utf-8" ?>
<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
	<xsl:output method="xml" version="1.0" encoding="utf-8" indent="yes" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" omit-xml-declaration="yes"/>
	<xsl:template match="/">
		<xsl:apply-templates select="//library/book"/>
	</xsl:template>
	<xsl:template match="//library/book">
		<h1>Title: <xsl:value-of select="@title" /></h1>
	</xsl:template>
</xsl:stylesheet>