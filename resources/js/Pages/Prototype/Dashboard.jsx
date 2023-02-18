import Flickity from "react-flickity-component";
import { Head } from "@inertiajs/react";

import Authenticated from "@/Layouts/Authenticated/index";
import FeaturedMovie from "@/Components/FeaturedMovie";
import MovieCard from "@/Components/MovieCard";

export default function Dashboard() {
    const flickityOption = {
        cellAlign: "left",
        contain: true,
        groupCells: 1,
        wrapAround: false,
        pageDots: false,
        prevNextButtons: false,
        draggable: ">1",
    };
    return (
        <Authenticated>
            <Head>
                <link
                    rel="stylesheet"
                    href="https://unpkg.com/flickity@2/dist/flickity.min.css"
                />
                <title>Dashboard</title>
            </Head>
            <div>
                <div className="font-semibold text-[22px] text-black mb-4">
                    Featured Movies
                </div>
                <Flickity className="gap-[30px]" options={flickityOption}>
                    <FeaturedMovie
                        slug="the-batman-in-love"
                        name="The Batman in Love"
                        category="Comedy"
                        thumbnail="/images/featured-1.png"
                        rating={1}
                    />
                    <FeaturedMovie
                        slug="the-batman-in-love"
                        name="The Batman in Love"
                        category="Comedy"
                        thumbnail="/images/featured-2.png"
                        rating={2}
                    />
                    <FeaturedMovie
                        slug="the-batman-in-love"
                        name="The Batman in Love"
                        category="Comedy"
                        thumbnail="/images/featured-3.png"
                        rating={3}
                    />
                    <FeaturedMovie
                        slug="the-batman-in-love"
                        name="The Batman in Love"
                        category="Comedy"
                        thumbnail="/images/featured-1.png"
                        rating={4}
                    />
                </Flickity>
            </div>
            <div className="mt-[50px]">
                <div className="font-semibold text-[22px] text-black mb-4">
                    Browse
                </div>
                <Flickity className="gap-[30px]" options={flickityOption}>
                    {[1, 2, 3, 4, 5, 6].map((i) => (
                        <MovieCard
                            key={i}
                            slug="the-batman-in-love"
                            name={`The Batman in Love ${i}`}
                            category="Comedy"
                            thumbnail="/images/browse-1.png"
                        />
                    ))}
                </Flickity>
            </div>
        </Authenticated>
    );
}
