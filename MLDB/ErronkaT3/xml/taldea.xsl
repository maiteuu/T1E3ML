<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output method="html" indent="yes" />

    <xsl:param name="taldea_id" />

    <xsl:template match="/">
        <html>
            <head>
                <link rel="stylesheet" href="estiloak/estiloa.css" />
            </head>
            <div class="taldeakbody">
                <body>

                    <xsl:for-each select="//taldeak/taldea[@id=$taldea_id]">

                        <h1>
                            <xsl:value-of select="izena" />
                        </h1>

                        <img class="taldeaklogo">
                            <xsl:attribute name="src">
                                <xsl:value-of select="irudia" />
                            </xsl:attribute>
                        </img>

                        <p>
                            <b>Helbidea:</b>
                            <xsl:value-of select="helbidea" />
                        </p>

                        <p>
                            <b>Ereserkia:</b>

                        </p>

                        <audio controls="controls">
                            <xsl:attribute name="src">
                                <xsl:value-of select="audioa" />
                            </xsl:attribute>
                        </audio>


                        <h2>Jokalariak</h2>
                        <section class="sailkapena">
                            <table border="1" class="taula-sailkapena">
                                <thead>
                                    <tr>
                                        <th>NAN</th>
                                        <th>Argazkia</th>
                                        <th>Izena</th>
                                        <th>Abizena</th>
                                        <th>Jaiotza</th>
                                        <th>Soldata</th>
                                        <th>Posizioa</th>
                                    </tr>
                                </thead>

                                <xsl:for-each select="jokalariak/jokalaria">
                                    <tbody>
                                        <tr>

                                            <td>
                                                <xsl:value-of select="@nan" />
                                            </td>

                                            <td>
                                                <img class="logo-taula">
                                                    <xsl:attribute name="src">
                                                        <xsl:value-of select="argazkia" />
                                                    </xsl:attribute>
                                                </img>
                                            </td>

                                            <td>
                                                <xsl:value-of select="izena" />
                                            </td>

                                            <td>
                                                <xsl:value-of select="abizena" />
                                            </td>

                                            <td>
                                                <xsl:value-of select="jaiotza" />
                                            </td>

                                            <td>
                                                <xsl:value-of select="soldata" />
                                            </td>

                                            <td>
                                                <xsl:value-of select="posizioa" />
                                            </td>

                                        </tr>
                                    </tbody>
                                </xsl:for-each>

                            </table>
                        </section>

                    </xsl:for-each>
                </body>
            </div>
        </html>
    </xsl:template>

</xsl:stylesheet>